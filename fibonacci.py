class Fibonacci(object):
    """
    A Fibonacci sequence is a series where the next term is the sum of
    previous two terms. The first two terms of the Fibonacci sequence is 0
    followed by 1.
    """
    def __init__(self, n, term_1 = 0, term_2 = 1, next_term = 0):
        self.n = n
        self.term_1 = term_1
        self.term_2 = term_2
        self.next_term = next_term

    def getSeries(self):
        for i in range(1, self.n-1):

            if i == 1:
                print(str(self.term_1), end=", ", flush=True)
                pass

            if i == 2:
                print(str(self.term_2), end=", ", flush=True)
                pass

            self.next_term = int(self.term_1) + int(self.term_2)
            self.term_1 = self.term_2
            self.term_2 = self.next_term

            if i == self.n-2:
                end_line=""
            else:
                end_line=", "

            print(str(self.next_term), end=end_line, flush=True)



n = int(input("Enter the number of terms: "))
print("Fibonacci series: ", end="", flush=True)
fibonacci = Fibonacci(n)
fibonacci.getSeries()
print("\n")
