{load_presentation_object filename="post" assign="obj"}

	<form class="well span7" action="" method="post">
		<input type="text" class="search-query" name="heading" placeholder="Title.." style="width:430px;"/><br/><br/>
		<textarea name="resource" class="search-query" style="width:430px;" rows="2" cols="50" placeholder="Add a new resource.."></textarea><br/><br/>
		
		<select name="trend" class="search-query" style="width:140px;float:;">
		<option class="search-query" >Select a trend..</option>
		{section name=i loop=$obj->trend_list}
			<option value="{$obj->trend_list[i].tag_id}" class="search-query"> {$obj->trend_list[i].tag_name} </option> </h3>
		{/section}
		</select>
		<button name="post" class="btn  btn-primary" style="float:" >Share</button>
		
	</form>

