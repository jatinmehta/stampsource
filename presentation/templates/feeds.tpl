{load_presentation_object filename="feeds" assign="obj"}
<h3><b style='color:red;'>"{$obj->mUsername}" </b> Welcome to StampSource's Resource Locator... &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="span3 search-query"   placeholder="Search "/><i class="icon-search"></i><a href="{$obj->mLinkToLogout}"><button class="btn btn-inverse" style="float:right;">Logout </button></a> </h3>
<br/>
<div style="float:bottom; background:url('images/bg.jpg'); background-repeat:no-repeat;">
<br/>
</div><br/>
<br/>
<br/>

<div class="row">
	<div class="span2" >
		{include file=$obj->navCell}
	</div>

	<div class="span8">
		<div class="span8">
		{include file=$obj->postCell}
		</div>

		<div class="span8">
		{include file=$obj->contentCell}
		</div>
	</div>
</div>
