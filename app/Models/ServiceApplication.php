<?php

namespace App\Models;

use App\Traits\Approval;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceApplication extends Model
{
    use HasFactory;
    use Approval;

    protected $fillable = [
        'user_id', 'service_id', 'application_form_payment_status', 'date_of_inspection', 'service_type_id', 'status_summary', 'current_step', 'approval_status'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function payments()
    {
        $payments = Payment::where('employer_id', $this->user_id)->get();
        return $payments;
    }
}
