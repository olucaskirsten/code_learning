public class Aluno extends Pessoa {
    private int matricula;
    private String curso;

    public Aluno(String nome, int idade, String genero, int matricula, String curso) {
        super(nome, idade, genero);
        this.matricula = matricula;
        this.curso = curso;
    }

    public int getMatricula() {
        return matricula;
    }

    public String getCurso() {
        return curso;
    }

    @Override
    public String toString() {
        return super.toString() + ", Matricula: " + matricula + ", Curso: " + curso;
    }
}
