<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150201140740 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Equipe ADD responsavel_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Equipe ADD CONSTRAINT FK_23E5BF23BB9AF004 FOREIGN KEY (responsavel_id) REFERENCES Membro (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_23E5BF23BB9AF004 ON Equipe (responsavel_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Equipe DROP FOREIGN KEY FK_23E5BF23BB9AF004');
        $this->addSql('DROP INDEX UNIQ_23E5BF23BB9AF004 ON Equipe');
        $this->addSql('ALTER TABLE Equipe DROP responsavel_id');
    }
}
