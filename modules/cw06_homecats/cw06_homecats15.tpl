
	{if isset($subcategories)}
	<h2>{l s='Nos catégories' mod='cw06_homecats'}</h2>
		<!-- Subcategories -->
		<div id="subcategories">
			<ul class="inline_list">
			{foreach from=$subcategories item=subcategory}
				<li class="clearfix">
					<a href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'htmlall':'UTF-8'}" title="{$subcategory.name|escape:'htmlall':'UTF-8'}" class="img">
						{if $subcategory.id_image}
							<img src="{$link->getCatImageLink($subcategory.link_rewrite, $subcategory.id_image, 'medium_default')}" alt="" width="{$mediumSize.width}" height="{$mediumSize.height}" />
						{else}
							<img src="{$img_cat_dir}default-medium_default.jpg" alt="" width="{$mediumSize.width}" height="{$mediumSize.height}" />
						{/if}
					</a>
					<a href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'htmlall':'UTF-8'}" class="cat_name">{$subcategory.name|escape:'htmlall':'UTF-8'}</a>
					{if $subcategory.description}
						<p class="cat_desc">{$subcategory.description}</p>
					{/if}
				</li>
			{/foreach}
			</ul>
			<br class="clear"/>
		</div>
		
	{/if}
