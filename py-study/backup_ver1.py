import os
import time

# 1. 需要备份的文件与目录将被指定在一个列表中。
source = ['/home/qi/gist/py-study', '/home/qi/ssh_key']

# 2. 备份文件必须存储在一个主备份目录中
target_dir = '/home/qi/py-study-backup'

# 3. 将备份文件打包压缩成zip文件
# 4. zip文件的名称将有当前时间与日期构成
target = target_dir + os.sep + time.strftime('%Y%m%d%H%M%S') + '.zip'

if not os.path.exists(target_dir):
    os.mkdir(target_dir)

zip_command = 'zip -r {0} {1}'.format(target, ' '.join(source))

# 运行备份
print('Zip command is:')
print(zip_command)
print('Running:')
if os.system(zip_command) == 0:
    print('Successful backup to', target)
else:
    print('Backup Failed')
