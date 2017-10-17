bri = set(['brazil', 'russia', 'india'])
print('Is india in', bri, 'india' in bri)
print('Is usa in', bri, 'usa' in bri)

bric = bri.copy()
bric.add('china')
print('Is bric bri\'s superset:', bric.issuperset(bri))

bri.remove('russia')
print(bri & bric)
print(bri.intersection(bric))
