
@extends('emails.layout.emailLayout')

@section('content')

<p>Dear {!! $reg->first_name !!},</p>

<p>
    Thank you for enrolling in the Class of 2022 of the New Creation Bible Institute organised by Christ Family Ministry. 
</p>

<p>
    The tuition Fees for this year's Bible School is N3,500.00 only. Kindly make payment to the following account:
    0003719923
    Christ Family Ministry
    Access Bank
    Come along with the proof of payment for confirmation upon resumption. 
</p>

<p>
    Classes are scheduled for weekends (Friday, 5pm; Saturday, 8am - 2pm and Sunday 4pm) from Friday 25th March to Saturday 16th April, 2022.
    We look forward to receiving you.
</p>
<p>
    You are Blessed. 
    
    Coordinator, 
    NCBI 2022
</p>

@endsection