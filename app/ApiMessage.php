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
    public const SUCCESFULL_UPDATE    = 'SUCCESSFUL UPDATE DATA';
    public const SUCCESFULL_DELETE    = 'SUCCESSFUL DELETE DATA';
    public const CAN_T_DELETE         = 'Sorry, you cannot delete the data because it is being processed';
}
