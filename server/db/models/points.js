module.exports = function(sequelize, DataTypes) {
    const Points = sequelize.define('v', {
        id: DataTypes.INTEGER,
        male: DataTypes.BOOLEAN,
        initialPoints: DataTypes.INTEGER,
        sendMessage: DataTypes.INTEGER,
        readMessage: DataTypes.INTEGER,
        sendImage: DataTypes.INTEGER,
        point: DataTypes.INTEGER
    }, {
        tableName: 'points',
        paranoid: true,
        classMethods: {}
    }, );

    return Accounts;
};