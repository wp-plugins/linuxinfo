<?php
/*
Plugin Name: LinuxInfo
Description: Displays TONS of Linux Server data!
Author: SavageTraffic
Version: 0.8

The GNU General Public License is a free, copyleft license for software and other kinds of works.

The licenses for most software and other practical works are designed to take away your freedom to share and change the works. By contrast, the GNU General Public License is intended to guarantee your freedom to share and change all versions of a program--to make sure it remains free software for all its users. We, the Free Software Foundation, use the GNU General Public License for most of our software; it applies also to any other work released this way by its authors. You can apply it to your programs, too.

When we speak of free software, we are referring to freedom, not price. Our General Public Licenses are designed to make sure that you have the freedom to distribute copies of free software (and charge for them if you wish), that you receive source code or can get it if you want it, that you can change the software or use pieces of it in new free programs, and that you know you can do these things.

To protect your rights, we need to prevent others from denying you these rights or asking you to surrender the rights. Therefore, you have certain responsibilities if you distribute copies of the software, or if you modify it: responsibilities to respect the freedom of others.

For example, if you distribute copies of such a program, whether gratis or for a fee, you must pass on to the recipients the same freedoms that you received. You must make sure that they, too, receive or can get the source code. And you must show them these terms so they know their rights.

Developers that use the GNU GPL protect your rights with two steps: (1) assert copyright on the software, and (2) offer you this License giving you legal permission to copy, distribute and/or modify it.

For the developers' and authors' protection, the GPL clearly explains that there is no warranty for this free software. For both users' and authors' sake, the GPL requires that modified versions be marked as changed, so that their problems will not be attributed erroneously to authors of previous versions.

Some devices are designed to deny users access to install or run modified versions of the software inside them, although the manufacturer can do so. This is fundamentally incompatible with the aim of protecting users' freedom to change the software. The systematic pattern of such abuse occurs in the area of products for individuals to use, which is precisely where it is most unacceptable. Therefore, we have designed this version of the GPL to prohibit the practice for those products. If such problems arise substantially in other domains, we stand ready to extend this provision to those domains in future versions of the GPL, as needed to protect the freedom of users.

Finally, every program is threatened constantly by software patents. States should not allow patents to restrict development and use of software on general-purpose computers, but in those that do, we wish to avoid the special danger that patents applied to a free program could make it effectively proprietary. To prevent this, the GPL assures that patents cannot be used to render the program non-free.

The precise terms and conditions for copying, distribution and modification follow.

*/

# Linfo original licence

/*
 * This file is part of Linfo (c) 2010-2013 Joseph Gillotti.
 * 
 * Linfo is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * Linfo is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with Linfo.  If not, see <http://www.gnu.org/licenses/>.
 * 
*/

# General CSS
wp_register_style('styles.css', plugins_url('linuxinfo/layout/styles.css'));
wp_register_style('icons.css', plugins_url('linuxinfo/layout/icons.css'));

# General JS
wp_register_script( 'scripts.min.js', plugins_url( 'linuxinfo/layout/scripts.min.js') );

# Start Linuxinfo itself
function start_linuxinfo() 
{	

	# Call Styles
	wp_enqueue_style('styles.css');
	wp_enqueue_style('icons.css');
	
	# Call JS
	wp_enqueue_script('scripts.min.js');
	
	# Call include
	/*
		Was modified few things about CSS & JS calls, essentially other things are identically allowing with that port newest version easier.
	*/
	include '_call_index.php';

}

function linuxinfo_cascade_lateral_menu() 
{
	# Lateral Option WP Menu
  	add_menu_page('LinuxInfo', 'LinuxInfo', 'administrator', 'LinuxInfo', 'start_linuxinfo', plugins_url('linuxinfo/img/icons/favicon_linuxinfo_wp_v2.png'));
}

# Call cascade function
add_action('admin_menu', 'linuxinfo_cascade_lateral_menu');	

?>