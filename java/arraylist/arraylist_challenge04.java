import java.util.*;

public class arraylist_exercicio04 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        ArrayList<String> alunos = new ArrayList<>();

        int opcao;

        while(true) {
            System.out.println("\n===== MENU =====");
            System.out.println("[1] Adicionar aluno");
            System.out.println("[2] Listar alunos");
            System.out.println("[3] Buscar aluno");
            System.out.println("[4] Remover aluno");
            System.out.println("[5] Sair");

            System.out.println("=============================");
            System.out.print("Escolha uma opção: ");
            opcao = scanner.nextInt();

            if (opcao == 5) {
                System.out.println("Tchau!");
                break;
            }

            switch (opcao) {
                case 1:
                    System.out.print("Digite o nome do aluno: ");
                    alunos.add(scanner.next());

                    System.out.println("Aluno adicionado com sucesso!");
                    // System.out.println(alunos);
                    break;
                
                case 2:
                    Collections.sort(alunos);
                    System.out.println("Alunos cadastrados: ");

                    int i = 1;
                    
                    for(String aluno : alunos) {
                        System.out.printf("%d - %s\n", i, aluno);
                        i++;
                    }
                    
                    break;

                case 3:
                    System.out.print("Digite o nome do aluno para buscar: ");
                    String nome = scanner.next();

                    if (alunos.contains(nome)) {
                        System.out.println("Aluno encontrado!");
                    } else {
                        System.out.println("Aluno não encontrado!");
                    }
                    break;

                case 4:
                    System.out.print("Digite o nome do aluno para buscar: ");
                    String nomeRemover = scanner.next();

                    if (alunos.contains(nomeRemover)) {
                        alunos.remove(nomeRemover);
                        System.out.println("Aluno removido!");
                    } else {
                        System.out.println("Aluno não removido!");
                    }

                    break;
            
                default:
                    System.out.println("Opção Inválida!");
                    break;
            }
        }                

        scanner.close();
    }
}