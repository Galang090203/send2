add = input("Teks :")
list_file = open(input("List : "), "r").read().splitlines()

for i in list_file:
    out = add+i+"\n"
    print(out)
    open("Result.txt", "a").write(out)