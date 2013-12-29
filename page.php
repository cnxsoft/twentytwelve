<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
     	 		<!-- Adsense 728x90 -->
				<script type="text/javascript"><!--
					google_ad_client = "ca-pub-8120806476788575";
					/* CNX Software - Leaderboard */
					google_ad_slot = "5594587235";
					google_ad_width = 728;
					google_ad_height = 90;
					//-->
				</script>
				<script type="text/javascript"
				src="//pagead2.googlesyndication.com/pagead/show_ads.js">
				</script>
        		        <!-- Adblock detection -->
				<script type="text/javascript"><!--
				if(document.getElementsByTagName("iframe").item(0) == null)
				{
				    //-->
				    document.write("<a href=\"http://www.cnx-software.com/support-us/\" rel=\"nofollow\"><img src=/pic/support_cnxsoft.png></a>");
				}
				</script>
				<?php get_template_part( 'content', 'page' ); ?>
				<!-- Adsense below page -->
				<table width=100%>
				<tr width=100%>
				<td align="center" width=50%>
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- CNXSoft Comments 300x250 -->
						<ins class="adsbygoogle"
						     style="display:inline-block;width:300px;height:250px"
						     data-ad-client="ca-pub-8120806476788575"
						     data-ad-slot="5230077125"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</td>
				<td align="center" width=50%>
					<!-- CNXSoft Comments Right -->
					<ins class="adsbygoogle"
					     style="display:inline-block;width:300px;height:250px"
					     data-ad-client="ca-pub-8120806476788575"
					     data-ad-slot="3026849301"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</td>
				</tr>
				</table>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>