# A complete template of a Local Moodle Plugin

This is a template of Moodle local plugins. You can use it as a boiler plate for your next plugin.

# Why should I use this?

Good question! I started unexpectedly developing for Moodle.  Moodle, as you may have noticed, is very academic in all its aspects even code. So you may not find the specific answer to your question quickly. And that's why this project is worth sharing.
This template is a result of reading all the documentation provided in Moodle Developer DOCs. Development of few production-ready plugins for large Moodle powered platforms. And finally, this is what I am using all the time to kick start any new plugin.

# How do I get started?

Clone the project to your workspace.

```zsh
git clone https://github.com/mohessaid/moodle_local_plugin.git
```
It's recommended to clone it to a custom name (name of your plugin).

```zsh
git clone https://github.com/mohessaid/moodle_local_plugin.git my_plugin_name`
```
## Edit the `version.php` file with your information.

The `version.php` file contains important information that helps Moodle install and
load your plugin. It looks like this:

```php
$plugin->component = 'local_moodle_local_plugin';
$plugin->version = 2017112900;
$plugin->requires = 2014051200;
$plugin->maturity = MATURITY_ALPHA;
$plugin->release = 'v0.0.1';
```
### Name (component)

```php
$plugin->component = 'local_course_editor';
```
The component property is the name of your plugin. The name must be in this format `type + name`. Where type is the type of our plugin, And the name is what we want to call our plugin. This naming style is necessary to allow the Moodle autoloader to load our plugin correctly. If we miss something in the name or change it in any place of our plugin, Moodle won't load it or detected it for installation if it's newly added.
The `type` part must be the same with the parent folder where we willing to put our plugin. For example, `local` for local plugins and  `mod` for module plugins. Every Moodle plugin type
has a folder in the root directory where we can put our plugins. If we are writing a child plugin, we use the appropriate folder of his parent plugin.
The `name` part is what we want to name the plugin. We can call it whatever we like.  If it respects the naming conventions and coding styles of Moodle.

### Version

The version property is an integer. It contains four parts and can be summiried as follow:
1. The year (`2017` in this case).
2. The month (`11` November in this case).
3. The day (`29` in this case).
4. The version `00`. this related to the day of development or release it your choice. You wil use this part on your daily development process to check the changes that require version upgrade. If you are willing to publish this plugin in the Moodle plugins directory this part will be `00` which is recommended.


###