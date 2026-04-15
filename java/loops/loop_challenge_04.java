package repetição;
import java.util.Scanner;

public class exercicio4_repeticao {
    public static void main(String[] args) {
      Scanner scanner = new Scanner(System.in);

      int num = 1, total = 0;

      while (num != 0) {
        System.out.println("Digite um número: ");
        num = scanner.nextInt();
        total += num;
      }

      System.out.print("o total é: " + total);
          
      scanner.close();
    }
  }
  