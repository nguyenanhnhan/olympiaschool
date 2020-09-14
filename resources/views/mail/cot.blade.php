Dear {{$evaluation->teacher->fullname}}, 
<br> <br>
Thank you for having me in your class. This is the teaching feedback for your {{$evaluation->schedule->class}} 
on {{$evaluation->schedule->day}} {{$evaluation->test}} at {{$evaluation->schedule->time}} 
<br>
<br>
<b>Strengths:</b>
<br>
{!!$evaluation->strengths!!}
<br><br>
<b>Areas for improvement:</b>
<br>
{!!$evaluation->improvement!!}
<br><br>
Thank you for your hard work and dedication.
<br> <br>
Kind regards,
<br> <br>
IEG Academic