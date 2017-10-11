def print_max(x, y):
    '''Print the maximum of two numbers.打印两个数值中的最大数。

    The two value must be integers.这两个数应该是整数'''
    # 如果可能，将其转换为整数类型
    x = int(x)
    y = int(y)
    

    if x > y:
        print(x, 'is maximum')
    else:
        print(y, 'is maximum')

print_max(3, 5)
print((print_max.__doc__))
help(print_max)
