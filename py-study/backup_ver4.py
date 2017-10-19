import os
import time

# 1. 需要备份的文件与目录将被指定在一个列表中。
source = ['/home/qi/gist/py-study', '/home/qi/ssh_key']

# 2. 备份文件必须存储在一个主备份目录中
target_dir = '/home/qi/py-study-backup'

if not os.path.exists(target_dir):

    os.mkdir(target_dir)

# 3. 将备份文件打包压缩成zip文件
# 4. 将当前日期作为主备份目录下的子目录名称
today = target_dir + os.sep + time.strftime('%Y%m%d')
# 将当前时间作为zip文件的文件名
now = time.strftime('%H%M%S')

# 添加一条来自用户的注释以创建zip文件的文件名
comment = input('Enter a comment -->')
# 检查是否有评论输入
if len(comment) == 0:
    target = today + os.sep + now + '.zip'
else:
    target = today + os.sep + now + '_' + \
        comment.replace(' ', '_') + '.zip'

# 如果子目录不存在则创建一个
if not os.path.exists(today):
    os.mkdir(today)
    print('Successfully created directory', today)

# 5. 使用zip命令将文件打包成zip格式    
zip_command = 'zip -r {0} {1}'.format(target, ' '.join(source))

# 运行备份
print('Zip command is:')
print(zip_command)
print('Running:')
if os.system(zip_command) == 0:
    print('Successful backup to', target)
else:
    print('Backup Failed')
