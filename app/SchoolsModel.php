<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ContractorModel;

class SchoolsModel extends Model
{
    protected $table="schools";

    protected $fillable = [
        'user_id', 'first_name','last_name','school_name','address','zipcode','web_address','phone_number','email','hours','fulltime', 'partime','age_range','application_fee','application_fee_hide','average_waitlist_time','average_waitlist_time_hide','application_due_date','application_due_date_hide','description','image','stripe_account_id','bank_account_id','lat','long'
    ];
}
