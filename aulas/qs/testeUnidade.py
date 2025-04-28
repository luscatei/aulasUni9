import unittest

def soma(a, b):
  return a + b

class TestSoma(unittest.TestCase):
    def test_soma_positivos(self):
        self.assertEqual(soma(3, 4), 7)
        self.assertEqual(soma(5, 1), 6)

    def test_soma_negativos(self):
        self.assertEqual(soma(-1, -1), -2)
        self.assertEqual(soma(-5, -5), -10)

    def test_soma_zero(self):
        self.assertEqual(soma(0, 0), 0)
        self.assertEqual(soma(5, 0), 5)
        self.assertEqual(soma(0, 5), 5)

def sub(a, b):
  return a - b
class TestSub(unittest.TestCase):
    def test_sub_positivos(self):
        self.assertEqual(sub(5, 3), 2)
        self.assertEqual(sub(10, 4), 6)

    def test_sub_negativos(self):
        self.assertEqual(sub(-1, -1), 0)
        self.assertEqual(sub(-5, -3), -2)

    def test_sub_zero(self):
        self.assertEqual(sub(0, 0), 0)
        self.assertEqual(sub(5, 0), 5)
        self.assertEqual(sub(0, 5), -5)

def eh_par(n):
  return n % 2 == 0

class TestEhPar(unittest.TestCase):
    def test_eh_par(self):
        self.assertTrue(eh_par(2))
        self.assertTrue(eh_par(4))
        self.assertTrue(eh_par(0))

    def test_nao_eh_par(self):
        self.assertFalse(eh_par(21))
        self.assertFalse(eh_par(3))
        self.assertFalse(eh_par(-1))


def multipli(a, b):
  return a * b

class TestMultipli(unittest.TestCase):
    def test_multipli_positivos(self):
        self.assertEqual(multipli(3, 4), 12)
        self.assertEqual(multipli(5, 1), 5)

    def test_multipli_negativos(self):
        self.assertEqual(multipli(-1, -1), 1)
        self.assertEqual(multipli(-5, -5), 25)

    def test_multipli_zero(self):
        self.assertEqual(multipli(0, 0), 0)
        self.assertEqual(multipli(5, 0), 0)
        self.assertEqual(multipli(0, 5), 0)


if __name__ == '__main__':
    unittest.main(argv=['first-arg-is-ignored'], exit=False)