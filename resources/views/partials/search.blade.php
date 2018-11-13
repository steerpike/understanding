<form method="POST" action="/">
{{ csrf_field() }}
<input type="text" name="search_term" />
<input type="submit" name="Search" value="Search" />
</form>