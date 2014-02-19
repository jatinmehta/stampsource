{load_presentation_object filename="content" assign="obj"}


<div class="span8">
<h3 style="color:orange;"> {$obj->title} </h3>
<a href="{$obj->mLinkToTopRated}"><button class="btn" style="float:right;" >Show Top Rated</button></a><br/><br/>
</div>

{section name=i loop=$obj->content_stream}

<br/>	
<div class="row">
	<div class="span1 " style="text-align:center; background-image:url('images/stamp.jpg'); background-repeat:no-repeat;">
		<br/>	

		<p style="color:red; font-size:15px; font-weight:bold;">&nbsp;{$obj->content_stream[i].stamps}&nbsp;</p>
			<br/>	
	</div>
	<div class="span6">
	<div class="span6 search-query" style="background-color: #ccc;">
	<h4>{$obj->content_stream[i].heading}</h4>
	</div>
	
	<div class="span6 search-query" style="background-color: #eee;">
	<br/>
	<p>{$obj->content_stream[i].content}</p>
	<p>{$obj->content_stream[i].added_on}</p>
	</div>
	</div>
	<br/>
	<div class="span1" style="float:right;">
		<br/>
		<a href="{$obj->content_stream[i].upstamp_url}" ><i class="icon-chevron-up"></i></a><br/><br/>
		<a href="{$obj->content_stream[i].downstamp_url}"><i class="icon-chevron-down"></i></a>
	</div>
	
</div>
<br/>
{/section}