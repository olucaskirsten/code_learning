public class Professor extends Pessoa {
    private String especialidade;
    private double salario;

    public Professor(String nome, int idade, String genero, String especialidade, double salario) {
        super(nome, idade, genero);
        this.especialidade = especialidade;
        this.salario = salario;
    }

    public String getEspecialidade() {
        return especialidade;
    }

    public double getSalario() {
        return salario;
    }

    @Override
    public String toString() {
        return super.toString() + ", Especialidade: " + especialidade + ", Salario: " + salario;
    }
}
