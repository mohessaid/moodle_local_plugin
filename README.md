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


### Requises

This is the Moodle version required by the plugin.

### Maturity

How mature is the plugin. It can be one of these options ( `MATURITY_ALPHA, MATURITY_BETA, MATURITY_RC or MATURITY_STABLE`).

### Release

You can use whatever you want for your plugin release versioning. Moodle core plugins uses `v2.7.-r1` where `2.7` is the version of Moodle and `r1` is the first revision of their `2.7.x` branch.

## Update the functions and File names with plugin name

After we update the `version.php` file with our custom choices. Now we need to rename files that should contain the name and the type of our plugin like the files unders the `lang` folder. Then we have to change the functions names in the `bd` folder files. For example the in the `install.php` file we have this:

```php
function xmldb_moodle_local_plugin_install(){
    // Installation code goes here

}
```
Which needs to be updated by replacing the `moodle_local_plugin` part with our plugin name. `local` here is part of our default name so don't get confused with the type of plugin. In these functions you don't need to specify the type. Another example is the `externallib.php` file, where we can implement our external web services to use them through the web services API.

```php
class local_moodle_local_plugin_external extends external_api{
    // Functions (methods) goes here.   
}
```

# Where Can I find help?

If the getting started section is not enough for you to get going with your Moodle plugin. Please feel free to check the Moodle documentation on this matter. I included documentation links in every file. You can also check their tracking system and forums to get custom help.
- [Local plugins development][1]
- [Development documentations][2]
- [Plugin files][3]
- [Moodle tracker][4]
- [Moodle forums][5]
- [Moodle developers chat rooms][6]
- IRC channel name of the channel is `moodle` or `#moodle` if the application require the hash sign. You can use it [freenode irc webchat][7] if you are not familair with these chat rooms.

[1]: https://docs.moodle.org/dev/Local_plugins
[2]: https://docs.moodle.org/dev
[3]: https://docs.moodle.org/dev/Plugin_files
[4]: https://tracker.moodle.org
[5]: https://moodle.org/mod/forum/
[6]: https://docs.moodle.org/dev/Chatrooms
[7]: https://webchat.freenode.net