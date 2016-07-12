<?php

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['broken_content'] = explode("<!--more-->", $post->content);

$context['regionalImages'] = [ ['src'=>'/cd-wordpress/wp-content/themes/cd-theme/static/img/regional-bodies/coderdojo-wa.png', 'alt'=>'Alt desc',
														 'link'=>'http://coderdojo.org','target'=>'_blank','name'=>'CoderDojo', 'role'=>'WA'],

														['src'=>'/cd-wordpress/wp-content/themes/cd-theme/static/img/regional-bodies/coderdojo-indiana.png', 'alt'=>'Alt desc 2',
														 'link'=>'http://coderdojo.org', 'target'=>'_self','name'=>'CoderDojo', 'role'=>'Indiana'],

													  ['src'=>'/cd-wordpress/wp-content/themes/cd-theme/static/img/regional-bodies/coderdojo-nl.png', 'alt'=>'Alt desc 2',
														 'link'=>'http://coderdojo.org', 'target'=>'_self','name'=>'CoderDojo', 'role'=>'Netherlands'],

														['src'=>'/cd-wordpress/wp-content/themes/cd-theme/static/img/regional-bodies/coderdojo-turkiye.png', 'alt'=>'Alt desc 2',
												     'link'=>'http://coderdojo.org', 'target'=>'_self','name'=>'CoderDojo', 'role'=>'Turkiye'],

														['src'=>'/cd-wordpress/wp-content/themes/cd-theme/static/img/regional-bodies/coderdojo-japan.png', 'alt'=>'Alt desc 2',
												  	 'link'=>'http://coderdojo.org', 'target'=>'_self','name'=>'CoderDojo','role'=>'Japan'],

														['src'=>'/cd-wordpress/wp-content/themes/cd-theme/static/img/regional-bodies/coderdojo-committee.png', 'alt'=>'Alt desc 2',
														 'link'=>'http://coderdojo.org', 'target'=>'_self','name'=>'CoderDojo','role'=>'Community Commmittee']
													];
Timber::render('page-regional-bodies.twig', $context);
