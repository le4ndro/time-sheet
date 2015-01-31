<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150129163223 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Cliente ADD status TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE Conta ADD status TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE Contato ADD status TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE Equipe ADD status TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE Membro ADD status TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Cliente DROP status');
        $this->addSql('ALTER TABLE Conta DROP status');
        $this->addSql('ALTER TABLE Contato DROP status');
        $this->addSql('ALTER TABLE Equipe DROP status');
        $this->addSql('ALTER TABLE Membro DROP status');
    }
}
