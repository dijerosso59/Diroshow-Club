<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230601214244 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__order AS SELECT id, user_id, video_id, metting_id, date, amount, status FROM "order"');
        $this->addSql('DROP TABLE "order"');
        $this->addSql('CREATE TABLE "order" (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_id INTEGER NOT NULL, video_id INTEGER DEFAULT NULL, metting_id INTEGER DEFAULT NULL, date DATETIME NOT NULL, amount DOUBLE PRECISION NOT NULL, status BOOLEAN NOT NULL, CONSTRAINT FK_F5299398A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_F529939829C1004E FOREIGN KEY (video_id) REFERENCES video (id) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_F5299398D7520C29 FOREIGN KEY (metting_id) REFERENCES metting (id) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO "order" (id, user_id, video_id, metting_id, date, amount, status) SELECT id, user_id, video_id, metting_id, date, amount, status FROM __temp__order');
        $this->addSql('DROP TABLE __temp__order');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F5299398D7520C29 ON "order" (metting_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F529939829C1004E ON "order" (video_id)');
        $this->addSql('CREATE INDEX IDX_F5299398A76ED395 ON "order" (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__order AS SELECT id, user_id, video_id, metting_id, date, amount, status FROM "order"');
        $this->addSql('DROP TABLE "order"');
        $this->addSql('CREATE TABLE "order" (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_id INTEGER NOT NULL, video_id INTEGER NOT NULL, metting_id INTEGER NOT NULL, date DATETIME NOT NULL, amount DOUBLE PRECISION NOT NULL, status BOOLEAN NOT NULL, CONSTRAINT FK_F5299398A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_F529939829C1004E FOREIGN KEY (video_id) REFERENCES video (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_F5299398D7520C29 FOREIGN KEY (metting_id) REFERENCES metting (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO "order" (id, user_id, video_id, metting_id, date, amount, status) SELECT id, user_id, video_id, metting_id, date, amount, status FROM __temp__order');
        $this->addSql('DROP TABLE __temp__order');
        $this->addSql('CREATE INDEX IDX_F5299398A76ED395 ON "order" (user_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F529939829C1004E ON "order" (video_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F5299398D7520C29 ON "order" (metting_id)');
    }
}
