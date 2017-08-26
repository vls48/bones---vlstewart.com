<?php
/*
 Template Name: Custom Home Page
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

<!-- remove nav on just homepage-->
<style>
	nav{
		display: none;
	}
</style>

<!-- body and content--> 

			<div id="content">


				
	<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%% corner details and light SVG - animated %%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

					<object class="metals top-right" data="wp-content/themes/bones/library/images/top-right.svg" type="image/svg+xml">
					</object>
				
					<object class="metals top-left" data="wp-content/themes/bones/library/images/top-lefy.svg" type="image/svg+xml">
					</object>
				

				
					<svg class="metals top-right" width="119px" height="89px" viewBox="0 0 119 89" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					    <!-- Generator: Sketch 46 (44423) - http://www.bohemiancoding.com/sketch -->
					    <title>top-right</title>
					    <desc>Created with Sketch.</desc>
					    <defs>
					        <circle id="path-1" cx="103.891459" cy="13.8914595" r="13.8914595"></circle>
					        <filter x="-10.8%" y="-10.8%" width="121.6%" height="121.6%" filterUnits="objectBoundingBox" id="filter-2">
					            <feGaussianBlur stdDeviation="1.5" in="SourceAlpha" result="shadowBlurInner1"></feGaussianBlur>
					            <feOffset dx="0" dy="1" in="shadowBlurInner1" result="shadowOffsetInner1"></feOffset>
					            <feComposite in="shadowOffsetInner1" in2="SourceAlpha" operator="arithmetic" k2="-1" k3="1" result="shadowInnerInner1"></feComposite>
					            <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.5 0" type="matrix" in="shadowInnerInner1"></feColorMatrix>
					        </filter>
					        <circle id="path-3" cx="27.4987181" cy="27.4987181" r="27.4987181"></circle>
					    </defs>
					    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					        <g id="desk-homepage" transform="translate(-1030.000000, -59.000000)">
					            <g id="corners" transform="translate(42.000000, 41.000000)">
					                <g id="metals">
					                    <g id="top-right" transform="translate(988.000000, 19.000000)">
					                        <g id="tp-rght">
					                            <use fill="#0F3E3F" fill-rule="evenodd" xlink:href="#path-1"></use>
					                            <use fill="black" fill-opacity="1" filter="url(#filter-2)" xlink:href="#path-1"></use>
					                            <use stroke="#979797" stroke-width="2" xlink:href="#path-1"></use>
					                        </g>
					                        <g id="light" transform="translate(0.000000, 33.000000)">
					                            <g id="Oval-5">
					                                <use fill="#EEEAEA" fill-rule="evenodd" xlink:href="#path-3"></use>
					                                <circle class="hey" stroke="#C3C3C3" stroke-width="3" cx="27.4987181" cy="27.4987181" r="25.9987181"></circle>
					                            </g>
					                            <path d="M20.3490514,7.69964106 C12.0466221,11.9081817 7.2801776,17.0412757 6.04971797,23.0989232 C5.49974361,28.5986668 5.49974361,35.1983591 13.1993847,42.8980002 C20.8990257,50.5976412 35.1118598,47.7896741 39.598154,45.0978976 C39.0481796,40.1481284 37.3982566,30.7985642 25.848795,25.848795 C18.1491539,22.5489488 16.315906,16.4992308 20.3490514,7.69964106 Z" id="Path-6" fill-opacity="0.390000015" fill="#B3B3B3"></path>
					                            <path d="M39.3830313,33.6051741 C39.7332657,35.4783853 39.5800522,37.0716523 38.9233908,38.3849751 C38.1748358,39.8820851 37.7240019,40.7710694 37.5708891,41.0519281 L38.0449725,45.9201799 L38.0448282,45.9201939 C38.0555419,46.0302106 38.1534132,46.1107115 38.2634298,46.0999978 C38.3287072,46.0936409 38.3867281,46.0557051 38.4187312,45.9984569 C40.5434683,42.1976678 41.5393295,39.6322009 41.4063151,38.3020563 C41.2808827,37.0477325 40.6743672,35.4373694 39.5867685,33.4709669 L39.3765788,33.5872208 C39.3796765,33.5928214 39.381855,33.598883 39.3830313,33.6051741 Z" id="Path-4" fill="#FFFFFF" opacity="0.735657649" transform="translate(39.494479, 40.179207) rotate(13.000000) translate(-39.494479, -40.179207) "></path>
					                            <path d="M43.1039009,22.5633481 C42.7530595,23.9498113 42.3694424,25.1943077 41.9530496,26.2968371 C41.4859795,27.5335506 41.0325792,28.0145203 40.5928486,27.7397461 L44.9864737,37.9812662 L44.986487,37.9812604 C45.0300318,38.0827632 45.1476161,38.1297474 45.2491189,38.0862026 C45.2965397,38.065859 45.3342619,38.0279734 45.3544002,37.9804651 C47.3720351,33.2206717 48.3131871,30.1641212 48.1778564,28.8108138 C48.0441353,27.4736034 46.5205705,25.34502 43.6071619,22.4250636 L43.6072042,22.4250213 C43.4901552,22.3077092 43.3001679,22.307496 43.1828558,22.424545 C43.1444831,22.4628317 43.1171986,22.510798 43.1039009,22.5633481 Z" id="Path-4-Copy" fill="#FFFFFF" opacity="0.735657649" transform="translate(44.391732, 30.219678) rotate(13.000000) translate(-44.391732, -30.219678) "></path>
					                        </g>
					                    </g>
					                </g>
					            </g>
					        </g>
					    </g>
					</svg>

					<object class="metals bottom-right" data="wp-content/themes/bones/library/images/bottom-right.svg" type="image/svg+xml">
					</object>

					<object class="metals bottom-left" data="wp-content/themes/bones/library/images/btm-left.svg" type="image/svg+xml">
					</object>

	<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%% end of coner details %%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->



				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all cf cont-all" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								 <header class="article-header">
								
									<h1 class="page-title">VICTORIA STEWART<?php //the_title(); ?> </h1>
									<!--
								
									<p class="byline vcard">
										<?php printf( __( 'Posted <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
									</p>-->
								
								
								</header> 

								<section class="entry-content-home" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();

										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										 *
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
								
								

								</section>



								<footer class="article-footer">

                  <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?> 

								</footer>
								

								<?php comments_template(); ?>

							</article>


			<!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%% SVG NAV BUTTONS %%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

						<div class="but-nav">
						
							 <?php 

								$args = [
									'menu' => 'home-nav',
									'menu_class' => 'nav-buttons',
									'link_before' => '<?xml version="1.0" encoding="UTF-8"?>
												<svg width="148px" height="179px" viewBox="0 0 148 179" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
												    <!-- Generator: Sketch 46 (44423) - http://www.bohemiancoding.com/sketch -->

												    <style type="text/css"> #Oval:hover{
												          transform: scale(.97);
												          transition: all .2s ease-in;
												          transform-origin: 38.1px 38.1px;
												          fill: #E9E9E9;
												        }

												        #Oval{
												          transition: all .2s ease-out;
												        }
												      </style>


												    <title>button</title>
												    <desc>Created with Sketch.</desc>
												    <defs>
												        <filter x="-2.1%" y="-2.1%" width="104.2%" height="104.1%" filterUnits="objectBoundingBox" id="filter-1">
												            <feOffset dx="0" dy="0" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
												            <feGaussianBlur stdDeviation="1" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
												            <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.5 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
												            <feMerge>
												                <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
												                <feMergeNode in="SourceGraphic"></feMergeNode>
												            </feMerge>
												        </filter>
												        <rect id="path-2" x="0" y="0" width="143.869019" height="145.224186"></rect>
												        <pattern id="pattern-3" width="18.24" height="18.24" x="-18.24" y="-18.24" patternUnits="userSpaceOnUse">
												            <use xlink:href="#image-4" transform="scale(0.38,0.38)"></use>
												        </pattern>
												        <image id="image-4" width="48" height="48" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAV9JREFUaAXt2O0NgjAQBmBrt4DoDiawEHEQB1F3MK7BHKxR+2oKQfnseXCX0B/SEr3zucZIz+R57nZ+OOfuZVmeMcWaOEyWZVdjTBHicMW3aZpekMQnOyVJcqiq6hmSUq6Ig3iIyxnf+iRH7iSc8e1SleJCWGyvZsQboBlRA7QiWgCNiB+ANkQnQBOiF6AFMQjQgBgFSEdMAkhGTAZIRcwCSETMBkhDRAEkIaIBUhAkgAQEGbA2AgCDL0Edax2KrO8e3JCcCsDn10CgK/HQ2I0IZ+w9KucXBfo4mGJNHA79JfSBQhzO+FtfKFS567rEb2LrC3VV/vse507Uf2ScSQDiil8DOJOEHeFAtAAaET8AbYhOgCZEL0ALYhCgATEKkI6YBJCMmAyQipgFkIiYDZCGiAJIQkQDpCBIAAkIMmBtBAD/OMizPe+jQBh9j+JbX+hTn+a1r1K437wrfvYd/wV+UgblD/bGFgAAAABJRU5ErkJggg=="></image>
												        <filter x="-1.0%" y="-1.0%" width="102.1%" height="102.1%" filterUnits="objectBoundingBox" id="filter-5">
												            <feMorphology radius="2" operator="erode" in="SourceAlpha" result="shadowSpreadInner1"></feMorphology>
												            <feGaussianBlur stdDeviation="0.5" in="shadowSpreadInner1" result="shadowBlurInner1"></feGaussianBlur>
												            <feOffset dx="0" dy="0" in="shadowBlurInner1" result="shadowOffsetInner1"></feOffset>
												            <feComposite in="shadowOffsetInner1" in2="SourceAlpha" operator="arithmetic" k2="-1" k3="1" result="shadowInnerInner1"></feComposite>
												            <feColorMatrix values="0 0 0 0 0.31385523   0 0 0 0 0.31385523   0 0 0 0 0.31385523  0 0 0 0.5 0" type="matrix" in="shadowInnerInner1"></feColorMatrix>
												        </filter>
												        <ellipse id="path-6" cx="72.6874859" cy="70.0827708" rx="38.1271413" ry="38.0944868"></ellipse>
												        <filter x="-15.1%" y="-15.1%" width="130.2%" height="130.2%" filterUnits="objectBoundingBox" id="filter-7">
												            <feMorphology radius="1.5" operator="dilate" in="SourceAlpha" result="shadowSpreadOuter1"></feMorphology>
												            <feOffset dx="0" dy="0" in="shadowSpreadOuter1" result="shadowOffsetOuter1"></feOffset>
												            <feGaussianBlur stdDeviation="3" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
												            <feComposite in="shadowBlurOuter1" in2="SourceAlpha" operator="out" result="shadowBlurOuter1"></feComposite>
												            <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.252122962 0" type="matrix" in="shadowBlurOuter1"></feColorMatrix>
												        </filter>
												        <pattern id="pattern-8" width="6.49999976" height="6.49999976" x="28.0603449" y="25.4882842" patternUnits="userSpaceOnUse">
												            <use xlink:href="#image-9" transform="scale(0.129999995,0.129999995)"></use>
												        </pattern>
												        <image id="image-9" width="50" height="50" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAMpJREFUaAXtmDEKxDAMBOP8yf9/gB+VVAYX2iKRYEHMNTmWnBTN6MBkXB8+c85n377WGvt75fVvj7vyIZy1GMRJP+qNkYiKM8OIk37UGyMRFWfWxsg4jwROotnebYy0GeTTCfZcQ06/2T+D+H2b1WIQYdgWY8SGXjTGiABjizFiQy8aY0SAscUYsaEXjTEiwNhijNjQi8YYEWBscRsjvKCz7ZBo3Ge1xIBhzAu6EEtt2Ga1GKR2MfLVMJJnWFsBI7U889UwkmdYW+EFfQIbnIOf3rkAAAAASUVORK5CYII="></image>
												        <filter x="-19.0%" y="-19.0%" width="138.0%" height="138.1%" filterUnits="objectBoundingBox" id="filter-10">
												            <feMorphology radius="5" operator="erode" in="SourceAlpha" result="shadowSpreadInner1"></feMorphology>
												            <feGaussianBlur stdDeviation="4" in="shadowSpreadInner1" result="shadowBlurInner1"></feGaussianBlur>
												            <feOffset dx="0" dy="0" in="shadowBlurInner1" result="shadowOffsetInner1"></feOffset>
												            <feComposite in="shadowOffsetInner1" in2="SourceAlpha" operator="arithmetic" k2="-1" k3="1" result="shadowInnerInner1"></feComposite>
												            <feColorMatrix values="0 0 0 0 1   0 0 0 0 1   0 0 0 0 1  0 0 0 0.5 0" type="matrix" in="shadowInnerInner1"></feColorMatrix>
												        </filter>
												    </defs>
												    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												        <g id="mobile-homepage-copy" transform="translate(-122.000000, -443.000000)">
												            <g id="Group" transform="translate(116.000000, 432.000000)">
												                <g id="button" transform="translate(8.000000, 0.000000)">
												                    <path d="M16.7007814,13.7962977 L16.7007814,186.619181" id="Line-3" stroke="#979797" stroke-width="5" stroke-linecap="round"></path>
												                    <path d="M127.071163,13.7962977 L127.071163,186.619181" id="Line-3-Copy" stroke="#979797" stroke-width="5" stroke-linecap="round"></path>
												                    <g id="Group-2" filter="url(#filter-1)" transform="translate(0.000000, 29.044837)">
												                        <g id="Rectangle-5">
												                            <use fill="#A5A5A5" fill-rule="evenodd" xlink:href="#path-2"></use>
												                            <use fill-opacity="0.1" fill="url(#pattern-3)" fill-rule="evenodd" xlink:href="#path-2"></use>
												                            <use fill="black" fill-opacity="1" filter="url(#filter-5)" xlink:href="#path-2"></use>
												                        </g>
												                        <g id="Oval">
												                            <use fill="black" fill-opacity="1" filter="url(#filter-7)" xlink:href="#path-6"></use>
												                            <use fill="#EEEEEE" fill-rule="evenodd" xlink:href="#path-6"></use>
												                            <use fill-opacity="0.0199999996" fill="url(#pattern-8)" fill-rule="evenodd" xlink:href="#path-6"></use>
												                            <use fill="black" fill-opacity="1" filter="url(#filter-10)" xlink:href="#path-6"></use>
												                            <use stroke="#CDCDCD" stroke-width="2" xlink:href="#path-6"></use>
												                        </g>
												                    </g>
												                </g>
												            </g>
												        </g>
												    </g>
												</svg>'
								];

								wp_nav_menu($args);

							?> 
					

						</div>

			<!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%% END SVG NAV BUTTONS %%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->


							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

						

				</div>

			</div>

			<!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%% FOOTER - not used %%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

				

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
