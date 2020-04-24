<p>Welcome to <b>Shopee</b>,</p>
<br>

To verify email <a href="{{ route('sendEmailDone',["email" => $user->email, "verifyToken" => $user->verifyToken]) }}">click here</a>