{extends file='/home/content/99/11499199/html/templates/commonLayout.tpl'}
{block name=content}
	<div id="{#prefixSupport#}block" class="{#prefixSupport#}border" style="max-width:800px !important">
		<h3 class="{#prefixSupport#}title">BBCode documentation</h3>
		<hr>
		<h4 class="{#prefixSupport#}note {#prefixSupport#}subtitle">
			Youtube embed &nbsp;&nbsp;
			<a href="http://techberry.org/forum/">
				<span class="generalBadge">+ Forum</span>
			</a>&nbsp;
			<a href="http://techberry.org/chat/">
				<span class="generalBadge">+ Shoutbox</span>
			</a>
		</h4>
		<p class="{#prefixSupport#}note">
				bbcode: [youtube]p8zeWkYvvT4[/youtube]
				<br>
				<div class="spoiler" data-spoiler-link="1">Show output</div>
				<div class="spoiler-content" data-spoiler-link="1">
					<iframe class="spoiler" width="640" height="390" src="http://www.youtube.com/embed/p8zeWkYvvT4" frameborder="0"></iframe>
				</div>
		</p>
		<h4 class="{#prefixSupport#}note {#prefixSupport#}subtitle">
			Code (Syntax highlight)&nbsp;&nbsp;
			<a href="http://techberry.org/forum/">
				<span class="generalBadge">+ Forum</span>
			</a>&nbsp;
			<a href="http://techberry.org/chat/">
				<span class="generalBadge">+ Shoutbox</span>
			</a>&nbsp;
			<span class="generalBadge" {if $isLoggedIn}onclick="im('admin')"{/if}>+ IM</span>
		</h4>
		<p class="{#prefixSupport#}note">
				bbcode: [code]int i = 1; /* etc.. */ [/code]
				<br>
				<div class="spoiler" data-spoiler-link="2">Show output</div>
				<div class="spoiler-content" data-spoiler-link="2">
					<pre class="prettyprint">int i = 1; /* etc.. */</pre>
				</div>
		</p>
		<h4 class="{#prefixSupport#}note {#prefixSupport#}subtitle">
			MathJax&nbsp;&nbsp;
			<a href="http://techberry.org/forum/">
				<span class="generalBadge">+ Forum</span>
			</a>&nbsp;
			<a href="http://techberry.org/chat/">
				<span class="generalBadge">+ Shoutbox</span>
			</a>&nbsp;
			<span class="generalBadge" {if $isLoggedIn}onclick="im('admin')"{/if}>+ IM</span>
		</h4>
		<p class="{#prefixSupport#}note">
				bbcode: 
{literal}<pre><span class="s_note">[code]</maths>
<span class="k">\begin</span><span class="nb">{</span>aligned<span class="nb">}</span>
  <span class="k">\nabla</span> <span class="k">\times</span> <span class="k">\vec</span><span class="nb">{</span><span class="k">\mathbf</span><span class="nb">{</span>B<span class="nb">}}</span> -<span class="k">\,</span> <span class="k">\frac</span>1c<span class="k">\,</span> <span class="k">\frac</span><span class="nb">{</span><span class="k">\partial\vec</span><span class="nb">{</span><span class="k">\mathbf</span><span class="nb">{</span>E<span class="nb">}}}{</span><span class="k">\partial</span> t<span class="nb">}</span>
	 <span class="nb">&amp;</span> = <span class="k">\frac</span><span class="nb">{</span>4<span class="k">\pi</span><span class="nb">}{</span>c<span class="nb">}</span><span class="k">\vec</span><span class="nb">{</span><span class="k">\mathbf</span><span class="nb">{</span>j<span class="nb">}}</span> <span class="k">\\</span>
  <span class="k">\nabla</span> <span class="k">\cdot</span> <span class="k">\vec</span><span class="nb">{</span><span class="k">\mathbf</span><span class="nb">{</span>E<span class="nb">}}</span> <span class="nb">&amp;</span> = 4 <span class="k">\pi</span> <span class="k">\rho</span> <span class="k">\\</span>
  <span class="k">\nabla</span> <span class="k">\times</span> <span class="k">\vec</span><span class="nb">{</span><span class="k">\mathbf</span><span class="nb">{</span>E<span class="nb">}}</span><span class="k">\,</span> +<span class="k">\,</span> <span class="k">\frac</span>1c<span class="k">\,</span> <span class="k">\frac</span><span class="nb">{</span><span class="k">\partial\vec</span><span class="nb">{</span><span class="k">\mathbf</span><span class="nb">{</span>B<span class="nb">}}}{</span><span class="k">\partial</span> t<span class="nb">}</span>
	 <span class="nb">&amp;</span> = <span class="k">\vec</span><span class="nb">{</span><span class="k">\mathbf</span><span class="nb">{</span>0<span class="nb">}}</span> <span class="k">\\</span>
  <span class="k">\nabla</span> <span class="k">\cdot</span> <span class="k">\vec</span><span class="nb">{</span><span class="k">\mathbf</span><span class="nb">{</span>B<span class="nb">}}</span> <span class="nb">&amp;</span> = 0
<span class="k">\end</span><span class="nb">{</span>aligned<span class="nb">}</span>
<span class="s_note">[/maths]</span>
</pre>{/literal}
				<br>
				<div class="spoiler" data-spoiler-link="4">Show output</div>
				<div class="spoiler-content" data-spoiler-link="4">
					<span>
						\(
							{literal}
								\begin{aligned}
								  \nabla \times \vec{\mathbf{B}} -\, \frac1c\, \frac{\partial\vec{\mathbf{E}}}{\partial t}
									 & = \frac{4\pi}{c}\vec{\mathbf{j}} \\
								  \nabla \cdot \vec{\mathbf{E}} & = 4 \pi \rho \\
								  \nabla \times \vec{\mathbf{E}}\, +\, \frac1c\, \frac{\partial\vec{\mathbf{B}}}{\partial t}
									 & = \vec{\mathbf{0}} \\
								  \nabla \cdot \vec{\mathbf{B}} & = 0
								\end{aligned}
							{/literal}
						\)
					</span>
				</div>
		</p>
		<h4 class="{#prefixSupport#}note {#prefixSupport#}subtitle">
			Quote&nbsp;&nbsp;
			<a href="http://techberry.org/forum/">
				<span class="generalBadge">+ Forum</span>
			</a>&nbsp;
			<a href="http://techberry.org/chat/">
				<span class="generalBadge">+ Shoutbox</span>
			</a>&nbsp;
			<span class="generalBadge" {if $isLoggedIn}onclick="im('admin')"{/if}>+ IM</span>
		</h4>
		<p class="{#prefixSupport#}note">
				bbcode: [quote]Life isn’t about getting and having, it’s about giving and being. –Kevin Kruse[/quote]
				<br>
				<div class="spoiler" data-spoiler-link="3">Show output</div>
				<div class="spoiler-content" data-spoiler-link="3">
					<blockquote>Life isn’t about getting and having, it’s about giving and being. –Kevin Kruse</blockquote>
				</div>
		</p>
	</div>
{/block}