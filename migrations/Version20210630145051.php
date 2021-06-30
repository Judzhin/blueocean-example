<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210630145051 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE agents (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE players (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE view_3ds (id INT AUTO_INCREMENT NOT NULL, playerid INT DEFAULT NULL, agentid INT DEFAULT NULL, date DATE NOT NULL, currency VARCHAR(3) NOT NULL, bet NUMERIC(7, 2) DEFAULT NULL, win NUMERIC(7, 2) DEFAULT NULL, rake NUMERIC(7, 2) DEFAULT NULL, tournament NUMERIC(7, 2) DEFAULT NULL, net NUMERIC(7, 2) NOT NULL, fin NUMERIC(7, 2) NOT NULL, aams_ticket VARCHAR(40) NOT NULL, aams_table VARCHAR(40) NOT NULL, INDEX IDX_7F2626661763F889 (playerid), INDEX IDX_7F262666826F6AE3 (agentid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE view_3ds ADD CONSTRAINT FK_7F2626661763F889 FOREIGN KEY (playerid) REFERENCES players (id)');
        $this->addSql('ALTER TABLE view_3ds ADD CONSTRAINT FK_7F262666826F6AE3 FOREIGN KEY (agentid) REFERENCES agents (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE view_3ds DROP FOREIGN KEY FK_7F262666826F6AE3');
        $this->addSql('ALTER TABLE view_3ds DROP FOREIGN KEY FK_7F2626661763F889');
        $this->addSql('DROP TABLE agents');
        $this->addSql('DROP TABLE players');
        $this->addSql('DROP TABLE view_3ds');
    }
}
