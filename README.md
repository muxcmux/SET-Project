## Quick setup

* Clone a fresh copy of the repo
* Open in your editor/IDE of choice
* Make a copy of `Config/database.php.default`, remove the `.default` extension and put in the right credentials
* Make a copy of `webroot/index.php.default`, remove the `.default` extension, look for line 59 and edit the path, so it points to your CakePHP 2.0 directory

### Optional

* Add your project dependent files to the `/.gitignore` file (ex. `.project`) before you commit them!
* Set up an apache virtual host, so you run the app from root (ex. http://set-project.dev/)