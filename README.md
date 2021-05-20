# App Consultas

## Miro com a documentação do projeto
https://miro.com/app/board/o9J_lO9jUSo=/

## Descrição
Aplicativo web para controlar a agenda de consulta dos pacientes de uma clínica médica. O sistema terá os módulos de:
- Cadastro de médicos
    - Inclusão
    - Alteração
    - Exclusão
    - Listagem de todos os médicos
    - Filtro por área do médico
- Cadastro de pacientes
    - Inclusão
    - Alteração
    - Exclusão
    - Listagem de todos os pacientes
    - Opção de pesquisar o paciente por qualquer parte do nome.
- Cadastro de agenda
    - Agendamento de paciente
    - Alteração em uma agendamento
    - Exclusão de um agendamento
    - Listagem de todos os agendamentos

## Tecnologias (Stack)
- Apache (XAMPP)
- PHP
- MariaDB
- HTML
- CSS
- Javascript
- jQuery
- Bootstrap

---
## SQL - Banco de dados
### Criação do banco de dados
```sql
CREATE DATABASE BD_CONSULTORIO CHARACTER SET utf8 COLLATE utf8_general_ci;
```

### Criação da tabela médicos

```sql
CREATE TABLE `bd_consultorio`.`TB_MEDICOS` ( 
    `id` INT NOT NULL AUTO_INCREMENT ,  
    `nome` VARCHAR(100) NOT NULL ,  
    `telefone` VARCHAR(20) NOT NULL ,  
    `crm` VARCHAR(50) NOT NULL ,  
    `especialidade` VARCHAR(50) NOT NULL ,   
     PRIMARY KEY  (`id`)
) 
ENGINE = InnoDB;
```

### Criação da tabela pacientes

```sql
CREATE TABLE `bd_consultorio`.`tb_pacientes`(
    `ID` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(100) NOT NULL,
    `telefone` VARCHAR(20) NOT NULL,
    `data_nascimento` date NOT NULL,
    `convenio` VARCHAR(3) NOT NULL, 
    `diagnostico` text, 
    PRIMARY KEY (`id`)
    );
```



### Criação da tabela de agendamentos

```sql
CREATE TABLE `bd_consultorio`.`tb_agenda` (
     `id` INT NOT NULL AUTO_INCREMENT , 
     `data` DATE NOT NULL , 
     `hora` TIME NOT NULL ,  
     `id_medico` INT NOT NULL , 
     `sala` VARCHAR(20) NOT NULL , 
     `id_paciente` INT NOT NULL ,  
      PRIMARY KEY  (`id`)) 
ENGINE = InnoDB;


ALTER TABLE `tb_agenda` ADD CONSTRAINT `fk_agenda_medico` FOREIGN KEY (`id_medico`) REFERENCES `tb_medicos`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;


ALTER TABLE `tb_agenda` ADD CONSTRAINT `fk_agenda_paciente` FOREIGN KEY (`id_paciente`) REFERENCES `tb_pacientes`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

```

