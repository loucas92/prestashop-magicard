
	{if isset($subcategories)}
	<h2>{l s='Nos catégories' mod='cw06_homecats'}</h2>
		<!-- Subcategories -->
		<div id="subcategories">
			<ul class="inline_list">
			{foreach from=$subcategories item=subcategory}
				<li>
					
						{if $subcategory.id_image}
							<a href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'htmlall':'UTF-8'}" title="{$subcategory.name|escape:'htmlall':'UTF-8'}">
							<img src="{$link->getCatImageLink($subcategory.link_rewrite, $subcategory.id_image, 'medium')}" alt="" />
							</a>
						{/if}
					<br />
					<a href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'htmlall':'UTF-8'}">{$subcategory.name|escape:'htmlall':'UTF-8'}</a>
				</li>
			{/foreach}
			</ul>
			<br class="clear"/>
		</div>
		
	{/if}
