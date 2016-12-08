Sublime Text 使用笔记.md



### 主题

- 修改编辑器Color Scheme的时候，侧边栏的主题不改变？
在配置文件里面要设置 "theme": "Afterglow-orange.sublime-theme" 类似的主题

### Linux下Mongo使用笔记

- 如何启动mongo？
- 在命令行下输入mongo即可启动mongo

### TP5学习及使用笔记
- TP5在获取配置的时候使用``config('config_name')``

# Setting
- 呼出控制台 Ctrl+~

- 安装Package Control
1.ST3
import urllib.request,os,hashlib; h = 'df21e130d211cfc94d9b0905775a7c0f' + '1e3d39e33b79698005270310898eea76'; pf = 'Package Control.sublime-package'; ipp = sublime.installed_packages_path(); urllib.request.install_opener( urllib.request.build_opener( urllib.request.ProxyHandler()) ); by = urllib.request.urlopen( 'http://packagecontrol.io/' + pf.replace(' ', '%20')).read(); dh = hashlib.sha256(by).hexdigest(); print('Error validating download (got %s instead of %s), please try manual install' % (dh, h)) if dh != h else open(os.path.join( ipp, pf), 'wb' ).write(by)


# Plugins
- Markdown preview	Markdown预览插件