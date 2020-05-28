#Pink Floyd and Happiness

n = int(input('Enter the number of records'))
records = []
count = 0
print('Enter the records')
for i in range(0, n):
    records.append(int(input()))
    
for i in range(len(records)):
    if records[i] <= n:
        count ++
if count == n:
    print('Yes')
else:
    print('No')