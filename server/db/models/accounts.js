module.exports = function(sequelize, DataTypes) {
    const Accounts = sequelize.define('Accounts', {
        id: {type: DataTypes.INTEGER, primaryKey: true},
        point: DataTypes.INTEGER
    }, {
        tableName: 'accounts',
        paranoid: true,
        classMethods: {}
    }, );

    return Accounts;
};