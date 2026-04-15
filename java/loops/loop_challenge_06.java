package repetição;
import java.util.Scanner;

public class exercicio6_repeticao {
    public static void main(String[] args) {
      Scanner scanner = new Scanner(System.in);

      int anterior = 1, atual = 1;

      for (int i = 1; i <= 10; i++) {
        System.out.print(anterior + " ");
        int proximo = anterior + atual;
        anterior = atual;
        atual = proximo;
      }
          
      scanner.close();
    }
  }
  