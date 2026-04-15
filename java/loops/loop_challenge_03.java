package repetição;
import java.util.Scanner;

public class exercicio3_repeticao {
    public static void main(String[] args) {
      Scanner scanner = new Scanner(System.in);

      int total = 0;

      System.out.println("Digite um número: ");
      int num = scanner.nextInt();

      System.out.println("-------------------");
  
      for (int i = 1; i <= num; i++) {
        if (i % 2 == 0) {
            System.out.println(i);
            total++;
        }
      }

      System.out.println("-------------------");
      System.out.print("qtd. de números apresentados: " + total);
          
      scanner.close();
    }
  }
  