def total(a=5, *numbers, **phonebook):
    print('a', a)

    # 遍历元祖中的所有项目
    for single_item in numbers:
        print('single_itme', single_item)

    # 遍历字典中的所有项目
    for first_part, second_part in phonebook.items():
        print(first_part, second_part)

total(10,1,2,3,Jack=1123,John=2231,Inge=1560)

def test():
    pass

print(test())
