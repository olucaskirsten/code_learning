import java.time.Duration;
import java.time.LocalTime;
import java.time.format.DateTimeFormatter;
import java.util.Scanner;

public class challengue_date_time_2 {

    public static void main(String[] args) {

        /* Cria o scanner para leitura do teclado */
        Scanner scanner = new Scanner(System.in);

        /* Define o formato da hora */
        DateTimeFormatter formato = DateTimeFormatter.ofPattern("HH:mm");

        /* Lê o nome do funcionário */
        System.out.print("Digite o nome do funcionário: ");
        String nome = scanner.nextLine();

        /* Lê o horário de entrada */
        System.out.print("Digite o horário de entrada (HH:mm): ");
        String entradaTexto = scanner.nextLine();

        /* Lê o horário de saída */
        System.out.print("Digite o horário de saída (HH:mm): ");
        String saidaTexto = scanner.nextLine();

        /* Converte as Strings para LocalTime */
        LocalTime entrada = LocalTime.parse(entradaTexto, formato);
        LocalTime saida = LocalTime.parse(saidaTexto, formato);

        /* Calcula a duração entre entrada e saída */
        Duration diferenca = Duration.between(entrada, saida);

        /* Obtém o total de horas */
        long horas = diferenca.toHours();

        /* Obtém os minutos restantes */
        long minutos = diferenca.toMinutes() % 60;

        /* Verifica se trabalhou mais de 8 horas */
        boolean horaExtra = diferenca.toHours() >= 8 &&
                             diferenca.toMinutes() > 480;

        /* Exibe os resultados */
        System.out.println("\n-----------------------------");
        System.out.println("Nome: " + nome);
        System.out.println("Entrada: " + entrada.format(formato));
        System.out.println("Saída: " + saida.format(formato));
        System.out.println("Horas trabalhadas: " +
                horas + " horas e " + minutos + " minutos");

        /* Mostra se houve hora extra */
        if (horaExtra) {
            System.out.println("Horas extras: Sim");
        } else {
            System.out.println("Horas extras: Não");
        }

        System.out.println("-----------------------------");

        /* Fecha o scanner */
        scanner.close();
    }
}
