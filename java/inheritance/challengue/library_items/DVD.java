public class DVD extends ItemBiblioteca {
    private String categoria;
    private int duracaoMinutos;

    public DVD(String titulo, int anoPublicacao, String categoria, int duracaoMinutos) {
        super(titulo, anoPublicacao);
        this.categoria = categoria;
        this.duracaoMinutos = duracaoMinutos;
    }

    public String getCategoria() {
        return categoria;
    }

    public void setCategoria(String categoria) {
        this.categoria = categoria;
    }

    public int getDuracaoMinutos() {
        return duracaoMinutos;
    }

    public void setDuracaoMinutos(int duracaoMinutos) {
        this.duracaoMinutos = duracaoMinutos;
    }

    @Override
    public String toString() {
        return super.toString() + "\n" +
               "Categoria: " + categoria + "\n" +
               "Duracao em minutos: " + duracaoMinutos;
    }
}
