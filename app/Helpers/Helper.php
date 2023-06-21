<?php

namespace App\Helpers;

use GuzzleHttp\Psr7\MimeType;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use File;

class Helper
{
    public static function generateCode($model, $field, $prefix, $length = 5)
    {

        $data = $model::orderBy('id', 'desc')->first();
        if (in_array('Illuminate\Database\Eloquent\SoftDeletes', class_uses($model))) {
            $data = $model::withTrashed()->orderBy('id', 'desc')->first();
        }
        if (!$data) {
            $og_length = $length - 1;
            $last_number = 1;
        } else {
            $code = substr($data->$field, strlen($prefix));
            $act_last_no = ($code / 1) * 1;
            $inc_last_no = $act_last_no + 1;
            $last_number_length = strlen($inc_last_no);
            $og_length = $length - $last_number_length;
            $last_number = $inc_last_no;

        }
        $zeros = "";
        for ($i = 0; $i < $og_length; $i++) {
            $zeros .= "0";
        }
        return $prefix . $zeros . $last_number;
    }

    public static function storeAttachments($dir, Request $request, $name)
    {

        $stored_attachments = [];
        if(request()->allFiles()) {
            foreach (request()->allFiles() as $key => $attachment) {
                $fileName = $name.'_'. $key. '.'.$attachment->extension();
                $original_filename = $attachment->getClientOriginalName();

                Storage::disk('public')->put($dir.'/' . $fileName, file_get_contents($attachment));
                $stored_attachments[] = [
                    'original_filename' => $original_filename ,
                    'hash_filename' => $fileName,
                    'disk' => 'public',
                    'type' => $key,
                    'folder' => $dir,
                    'extension' => $attachment->extension(),
                    'mime_type' => MimeType::fromFilename($original_filename)
                ];
            }
        }
        $request->merge(['stored_attachments' => $stored_attachments]);

        return $request;
    }

    public static function deleteAttachments($files)
    {
        foreach ($files as $file) {
            $path =$file['folder'] . '/' . $file['hash_filename'];
            // File::delete($path);
            Storage::disk('public')->delete($path);
            //DELETE ATTACHMENTS ON POLYMORPH
            $attachmentToDelete = \App\Models\Attachment::find($file['id']);
            if($attachmentToDelete) {
                $attachmentToDelete->delete();
            }
        }
    }
}
