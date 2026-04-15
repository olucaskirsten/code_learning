package repetição;

import java.util.Scanner;

public class exercicio_extra_repeticao {
    public static void main(String[] args) {
      Scanner scanner = new Scanner(System.in);

      float saldo_inicial, operacao, creditos = 0, debitos = 0;

      System.out.printf("Saldo Inicial: ");
      saldo_inicial = scanner.nextFloat();

      System.out.printf("--------------------------------\n");

      do {
        System.out.print("Operação: ");
        operacao = scanner.nextFloat();

        if (operacao > 0) {
            creditos += operacao;
        }
        else {
            debitos += operacao;
        }

      } while (operacao != 0);

      debitos = debitos * -1;
      float cpmf = debitos * 0.004f;
      float saldo_final = saldo_inicial + creditos - debitos - cpmf;

      System.out.printf("--------------------------------\n");
      System.out.printf("Creditos......: R$ %.2f\n", creditos);
      System.out.printf("Debitos.......: R$ %.2f\n", debitos);
      System.out.printf("C.P.M.F.......: R$ %.2f\n", cpmf);
      System.out.printf("Saldo da Conta: R$ %.2f\n", saldo_final);
      System.out.printf("--------------------------------\n");

      scanner.close();
    }
}

