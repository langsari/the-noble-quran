<!DOCTYPE html>
<html>
<head>
<title>Highlight Keywords in Search Results with Laravel</title>
</head>
<body>
<h1>Highlight Keywords in Search Results with Laravel</h1>
<form>
<div class="input-group">
<input type="text" name="searchnews" id="searchnews" class="form-control ui-autocomplete-input" placeholder="Search News...." autocomplete="off">
<div class="input-group-append"><button><i class="fas fa-search"></i></button></div>
</div>
<ul id="news_id">
//show results here
</ul>
</form>
<script src=https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js></script>
<script> $(document).ready(function() { 
$("#searchnews").autocomplete({ source: function(e, t) { 
var t = $("input[name='_token']").val(); 
$.ajax({ 
url: "/search_keywords", 
method: "GET", 
data: { term: e.term, t:t}, 
dataType: "text", 
success: function(e) { 
$("#news_id").html(e); 
} 
}); 
} 
}); 
});
</script>
</body>
</html>