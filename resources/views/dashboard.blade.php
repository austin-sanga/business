<form action="/logout" method="POST">
@csrf
<a href="/logout" onclick="event.preventDefault();this.closest('form').submit();"> Logout </a>
</form>

<div>Loggedin view</div>
