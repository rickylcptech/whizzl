<?php

namespace App;

class ApiMessage
{
    public const SOMETHING_WENT_WRONG = 'SOMETHING_WENT_WRONG';
    public const UNAUTHORIZED         = 'UNAUTHORIZED';
    public const VALIDATION_ERROR     = 'VALIDATION_ERROR';
    public const NOT_FOUND            = 'NOT_FOUND';
    public const FAILED_DEPENDENCY    = 'FAILED_DEPENDENCY';
    public const BAD_REQUEST          = 'BAD_REQUEST';
    public const SUCCESFULL_UPDATE    = 'DATA BERHASIL DI UPDATE';
    public const SUCCESFULL_DELETE    = 'DATA BERHASIL DI HAPUS';
    public const CAN_T_DELETE         = 'Maaf anda tidak dapat menghapus data karena sedang di peroses';
}
