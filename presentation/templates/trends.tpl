{load_presentation_object filename="trends" assign="obj"}
<h3>Trends..</h3><br/>
{section name=i loop=$obj->trend_list}
	<div class="span2">
		{if $obj->trend_list[i].user_flag eq 1}
		<a href=""title="Remove Your Trend"><i class="icon-trash" style="float:right;"></i></a>
		{/if}
	<h4> <a href="{$obj->trend_list[i].feed_url}"> {$obj->trend_list[i].tag_name} </a> </h4>
	<img src="images/box.jpg" style="float:bottom;" />
	</div>
{/section}

<h4>Add New  Trend</h4>
<form class="span2" action="{$obj->mLinkToAddTrend}" method="post">
<br/>
<input type="text" class="search-query" name="trend" placeholder="Add a New Trend..." style="width:100px;"/><br/><br/>
<button name="add" class="btn  btn-primary" style="float:left; font-size:13px; ">Add</button>
</form>