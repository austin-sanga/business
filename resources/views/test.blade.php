

<span style="color: black">user_id </span>
<span>amount_invested</span>
<hr>
@foreach ($test as $test)
<span style="color: black">{{ $test->user_id }}</span>
<span>{{ $test->sum }}</span>
<hr>
@endforeach
