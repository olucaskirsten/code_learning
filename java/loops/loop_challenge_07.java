package repetição;
import java.util.Scanner;

public class exercicio7_repeticao {
    public static void main(String[] args) {
      Scanner scanner = new Scanner(System.in);

      int numerador = 1, denominador = 100;
      float soma = 0;

      for (int i = 1; i <= 100; i++) {
        soma += numerador / (float) denominador;
        numerador++;
        denominador--;
      }

      System.out.printf("resultado: %.2f", soma);
          
      scanner.close();
    }
  }
  