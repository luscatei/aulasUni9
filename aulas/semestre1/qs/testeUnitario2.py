import unittest

#1
def divisao(a, b):
    return a / b
class TesteDivisao(unittest.TestCase):
    def test_divisao_comum(self):
        self.assertEqual(divisao(10, 2), 5.0)
        self.assertEqual(divisao(9, 3), 3.0)
        self.assertEqual(divisao(7, 2), 3.5)

#2
def modulo(a, b):
    return a % b
class TesteModulo(unittest.TestCase):
    def test_modulo_comum(self):
        self.assertEqual(modulo(10, 3), 1.0)
        self.assertEqual(modulo(8, 4), 0.0)
        self.assertEqual(modulo(7, 2), 1.0)

#3
def potencia(a, b):
    return a ** b
class TestePotencia(unittest.TestCase):
    def test_potencia_comum(self):
        self.assertEqual(potencia(2, 3), 8.0)
        self.assertEqual(potencia(5, 0), 1.0)

#4
def media(a, b):
    return (a + b) / 2
class TesteMedia(unittest.TestCase):
    def test_media_comum(self):
        self.assertEqual(media(4, 6), 5.0)
        self.assertEqual(media(10, 20), 15.0)
        self.assertEqual(media(7, 2), 4.5)

#5
def maximo(a, b):
    return a if a > b else b
    
class TesteMaximo(unittest.TestCase):
    def test_maximo_comum(self):
        self.assertEqual(maximo(4, 7), 7)
        self.assertEqual(maximo(10, 10), 10)

        
if __name__ == '__main__':  
    unittest.main()