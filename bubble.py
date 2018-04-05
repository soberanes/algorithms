def bubbleOrder(lista):
    intercambios = True
    num_pasada = len(lista)-1
    while num_pasada > 0 and intercambios:
        intercambios = False
        for i in range(num_pasada):
            if lista[i] > lista[i+1]:
                intercambios = True
                temp = lista[i]
                lista[i] = lista[i+1]
                lista[i+1] = temp
        num_pasada = num_pasada-1


lista=[20,10,40,90,80,60,70,180,100,110]
bubbleOrder(lista)
print(lista)
